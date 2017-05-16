#include <stdio.h>
#include <unistd.h>
#include <stdlib.h>
#include <sys/types.h>
#include <sys/stat.h>
#include <fcntl.h>
#include <time.h>
#include <signal.h>
#include <errno.h>
#include <string.h>
#include <sys/mman.h>

int main(int argc, char *argv[]) {

  int fd;
  void *map_addr;
  int size;
  volatile unsigned int *mapped;
  int i;

 // if (argc != 4) {
   // fprintf(stderr, "Usage: %s uio-devfile size-in-bytes\n", argv[0]);
  //  exit(1);
 // }

 // size = atoi(argv[2]);
  size = 4096;
  if (size <= 0) {
    fprintf(stderr, "Bad size: %d\n", size);
    exit(1);
  }

  fd = open("/dev/uio0", O_RDWR);
  if (fd < 0) {
    perror("Failed to open devfile");
    return 1;
  }

  map_addr = mmap( NULL, size, PROT_READ | PROT_WRITE, MAP_SHARED, fd, 0);

  if (map_addr == MAP_FAILED) {
    perror("Failed to mmap");
    return 1;
  }

  mapped = map_addr;

  /*
   * Four writes and then four reads of unsigned ints (hence 32-bit aligned)
   * registers. It looks like a trivial data manipulations in C, but these are
   * really eight accesses to the hardware.
   */

 // for (i=0; i<4; i++)
   // mapped[i] = i;

  //mapped[0] = atoi( argv[3]);
  mapped[0] = 15;
  for (i=0; i<4; i++)
    printf("%d ", mapped[i]);

  printf("\n");

  munmap(map_addr, size);

  close(fd);
  return 0;
}
